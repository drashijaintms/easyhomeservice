<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    header('Content-Type: application/json');

    $type = trim($_POST['type'] ?? 'RHS-BATH');
    if (empty($type)) {
        $type = 'RHS-BATH';
    }

    $endpoint = "https://app.feedxo.io/api/v1/source/d32b41d1-ff84-40fa-aca3-0d0d493ddcf6/ingest?api_key=c994f8d0d4e1465f9afd46bbc96f955b";
    // $endpoint = "https://display.ringba.com/enrich/3021671894576269289";

    $phone = preg_replace('/\D/', '', $_POST['phone'] ?? '');

    // Resolve client IP
    $ip = trim($_POST['ip'] ?? '');
    if (empty($ip)) {
        $rawIp = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '';
        $ipParts = explode(',', $rawIp);
        $ip = trim($ipParts[0]);
    }

    $leadData = [
        'type'             => $type,
        'callerid'         => $phone,
        'phone'            => $phone,
        'first'            => trim($_POST['first'] ?? ''),
        'last'             => trim($_POST['last'] ?? ''),
        'email'            => trim($_POST['email'] ?? ''),
        'city'             => trim($_POST['city'] ?? ''),
        'state'            => trim($_POST['state'] ?? ''),
        'address'          => trim($_POST['address'] ?? ''),
        'zip'              => trim($_POST['zip'] ?? ''),
        'cq1'              => trim($_POST['cq1'] ?? ''),
        'appointment_date' => trim($_POST['appointment_date'] ?? ''),
        'appointment_time' => trim($_POST['appointment_time'] ?? ''),
        'ip'               => $ip
    ];

    $query = http_build_query($leadData);

    $separator = (strpos($endpoint, '?') !== false) ? '&' : '?';
    $url = $endpoint . $separator . $query;

    $ch = curl_init($url);

    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $query,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_USERAGENT      => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'
    ]);

    $result     = curl_exec($ch);
    $httpCode   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $curlError  = curl_error($ch);

    $headers = ($result !== false && $headerSize > 0) ? substr($result, 0, $headerSize) : '';
    $body    = ($result !== false) ? substr($result, $headerSize) : '';

    curl_close($ch);

    // Save log to logs/rhs-bath.log
    $logDir = __DIR__ . '/logs';
    if (!is_dir($logDir)) {
        @mkdir($logDir, 0755, true);
    }
    $logFile = $logDir . '/rhs-bath.log';

    $logEntry = "[" . date('Y-m-d H:i:s') . "] ================================================\n"
              . "REQUEST URL:   " . $url . "\n"
              . "HTTP STATUS:   " . $httpCode . "\n"
              . "CLIENT IP:     " . ($ip ?: ($_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN')) . "\n"
              . "LEAD DATA:     " . json_encode($leadData, JSON_UNESCAPED_SLASHES) . "\n"
              . "RESPONSE BODY: " . trim($body) . "\n";

    if (!empty($curlError)) {
        $logEntry .= "CURL ERROR:    " . $curlError . "\n";
    }

    $logEntry .= "========================================================================\n\n";

    @file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);

    echo json_encode([
        'success'          => ($httpCode >= 200 && $httpCode < 400 && $result !== false),
        'status'           => $httpCode,
        'curl_error'       => $curlError,
        'request_url'      => $url,
        'response_headers' => $headers,
        'response_body'    => $body
    ]);

    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="robots" content="noindex,nofollow">

<title>Bathroom Appointment Form</title>

<script src="https://cdn.tailwindcss.com"></script>

<script src="https://unpkg.com/react@18/umd/react.development.js"></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

<script>
Babel.registerPreset('react-classic',{
presets:[[Babel.availablePresets.react,{runtime:'classic'}]]
});
</script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
tailwind.config={
theme:{
extend:{
fontFamily:{body:["Poppins","sans-serif"]},
colors:{
brandGreen:"#04d36f",
navy:"#000073"
}
}
}
}
</script>

</head>

<body class="bg-slate-100 min-h-screen flex items-center justify-center p-5 font-body">

<div id="root" class="w-full"></div>

<script type="text/babel" data-presets="react-classic">

const {useState,useEffect}=React;

const STATES=[
"AL","AK","AZ","AR","CA","CO","CT","DE","FL","GA","HI","ID","IL","IN","IA","KS","KY","LA","ME","MD",
"MA","MI","MN","MS","MO","MT","NE","NV","NH","NJ","NM","NY","NC","ND","OH","OK","OR","PA","RI","SC",
"SD","TN","TX","UT","VT","VA","WA","WV","WI","WY"
];

function App(){

const [status,setStatus]=useState("idle");
const [successMessage,setSuccessMessage]=useState("");
const [errorMessage,setErrorMessage]=useState("");
const [errors,setErrors]=useState({});
const [zipLoading,setZipLoading]=useState(false);

const [form,setForm]=useState({
type:"RHS-BATH",
first:"",
last:"",
phone:"",
email:"",
city:"",
state:"",
address:"",
zip:"",
cq1:"",
appointment_date:"",
appointment_time:""
});

useEffect(()=>{

flatpickr("#date",{
dateFormat:"Y-m-d",
minDate:"today",
onChange:(d,s)=>{
setForm(f=>({...f,appointment_date:s}));
}
});

flatpickr("#time",{
enableTime:true,
noCalendar:true,
time_24hr:false,
dateFormat:"h:i K",
onChange:(d,s)=>{
setForm(f=>({...f,appointment_time:s}));
}
});

},[]);

const formatPhone = (val) => {
const digits = val.replace(/\D/g, '').slice(0, 10);
if (!digits.length) return "";
if (digits.length <= 3) return `(${digits}`;
if (digits.length <= 6) return `(${digits.slice(0, 3)}) ${digits.slice(3)}`;
return `(${digits.slice(0, 3)}) ${digits.slice(3, 6)}-${digits.slice(6)}`;
};

const handlePhone = (e) => {
const formatted = formatPhone(e.target.value);
setForm(f => ({ ...f, phone: formatted }));
if (errors.phone) setErrors(prev => ({ ...prev, phone: "" }));
};

const handleZip = async (e) => {
const digits = e.target.value.replace(/\D/g, '').slice(0, 5);
setForm(f => ({ ...f, zip: digits }));
if (errors.zip) setErrors(prev => ({ ...prev, zip: "" }));

if (digits.length === 5) {
setZipLoading(true);
try {
const res = await fetch(`https://api.zippopotam.us/us/${digits}`);
if (res.ok) {
const data = await res.json();
if (data && data.places && data.places.length > 0) {
const place = data.places[0];
const fetchedCity = place['place name'] || '';
const fetchedState = place['state abbreviation'] || '';
setForm(f => {
if (f.zip === digits) {
return {
...f,
city: fetchedCity || f.city,
state: fetchedState || f.state
};
}
return f;
});
setErrors(prev => ({ ...prev, city: "", state: "" }));
}
}
} catch (err) {
console.warn("ZIP lookup error:", err);
} finally {
setZipLoading(false);
}
}
};

const set=(key)=>(e)=>{
setForm(f=>({...f,[key]:e.target.value}));
if (errors[key]) setErrors(prev => ({ ...prev, [key]: "" }));
};

const validate=()=>{

const e={};

if(!form.first.trim()) e.first="First name required.";
if(!form.last.trim()) e.last="Last name required.";

const phone=form.phone.replace(/\D/g,'');

if(phone.length!==10)
e.phone="Please enter a 10-digit phone number.";

const email=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;

if(!email.test(form.email))
e.email="Enter a valid email.";

if(!form.address.trim()) e.address="Address required.";
if(!form.city.trim()) e.city="City required.";
if(!form.state) e.state="State required.";

if(!/^\d{5}$/.test(form.zip))
e.zip="ZIP must be 5 digits.";

if(!form.cq1.trim())
e.cq1="Message is required.";

if(!form.appointment_date)
e.appointment_date="Please select an appointment date.";

if(!form.appointment_time)
e.appointment_time="Please select an appointment time.";

return e;

};

const submit=async()=>{

const validation=validate();

if(Object.keys(validation).length){
setErrors(validation);
console.log(validation);
return;
}

setErrors({});
setSuccessMessage("");
setErrorMessage("");
setStatus("loading");

const fd=new FormData();

[
"type",
"first",
"last",
"phone",
"email",
"city",
"state",
"address",
"zip",
"cq1",
"appointment_date",
"appointment_time"
].forEach(k=>fd.append(k,form[k]));

try{

const res=await fetch(window.location.href,{
method:"POST",
headers:{
"X-Requested-With":"XMLHttpRequest"
},
body:fd
});

const data=await res.json();

console.log("Ringba Response:",data);

if(data.success){

setStatus("idle");

setSuccessMessage("Your bathroom appointment request has been submitted successfully.");

setForm({
type:"RHS-BATH",
first:"",
last:"",
phone:"",
email:"",
city:"",
state:"",
address:"",
zip:"",
cq1:"",
appointment_date:"",
appointment_time:""
});

document.getElementById("date")?._flatpickr?.clear();
document.getElementById("time")?._flatpickr?.clear();

}else{

setStatus("idle");
setErrorMessage("There was an error submitting your request. Please try again.");

console.group("Ringba");
console.log("HTTP:",data.status);
console.log("Request:",data.request_url);
console.log("Headers:",data.response_headers);
console.log("Body:",data.response_body);
console.log("Curl Error:",data.curl_error);
console.groupEnd();

}

}catch(err){

setStatus("idle");
setErrorMessage("Network error or invalid server response. Please try again.");
console.log(err);

}

};

const inputClass=(name)=>`border rounded-xl p-3 w-full outline-none transition ${
errors[name]?"border-red-500 ring-2 ring-red-200":"border-gray-300 focus:ring-2 focus:ring-brandGreen"
}`;

return(

<div className="max-w-2xl mx-auto w-full">

{successMessage ? (

<div className="bg-white rounded-3xl shadow-xl overflow-hidden">
<div className="h-2 bg-gradient-to-r from-navy to-brandGreen"></div>
<div className="p-10 text-center">

<div className="w-20 h-20 bg-green-50 text-brandGreen rounded-full flex items-center justify-center mx-auto mb-5 text-4xl font-bold border-2 border-green-200 shadow-sm">
✓
</div>

<h2 className="text-3xl font-bold text-navy mb-3">
Thank You!
</h2>

<p className="text-gray-600 text-base max-w-md mx-auto leading-relaxed">
{successMessage}
</p>

</div>
</div>

) : (

<>

{errorMessage&&(

<div className="mb-6 bg-red-50 border border-red-200 text-red-700 rounded-xl p-4 text-center shadow-lg">

<div className="font-semibold text-lg">
✕ Submission Error
</div>

<div className="text-sm mt-1">
{errorMessage}
</div>

</div>

)}

<div className="bg-white rounded-3xl shadow-xl overflow-hidden">

<div className="h-2 bg-gradient-to-r from-navy to-brandGreen"></div>

<div className="p-8">

<input type="hidden" name="type" value="RHS-BATH"/>

<h1 className="text-3xl font-bold text-center text-navy">
Bathroom Appointment Form
</h1>

<p className="text-center text-gray-500 mt-2 mb-8">
Fill in your details to schedule your bathroom appointment.
</p>

<div className="grid md:grid-cols-2 gap-4">

<div>
<input type="text" placeholder="First Name" value={form.first} onChange={set("first")} className={inputClass("first")}/>
{errors.first&&<p className="text-red-500 text-xs mt-1">{errors.first}</p>}
</div>

<div>
<input type="text" placeholder="Last Name" value={form.last} onChange={set("last")} className={inputClass("last")}/>
{errors.last&&<p className="text-red-500 text-xs mt-1">{errors.last}</p>}
</div>

</div>

<div className="grid md:grid-cols-2 gap-4 mt-4">

<div>
<input type="tel" placeholder="(XXX) XXX-XXXX" value={form.phone} onChange={handlePhone} maxLength={14} className={inputClass("phone")}/>
{errors.phone&&<p className="text-red-500 text-xs mt-1">{errors.phone}</p>}
</div>

<div>
<input type="email" placeholder="Email Address" value={form.email} onChange={set("email")} className={inputClass("email")}/>
{errors.email&&<p className="text-red-500 text-xs mt-1">{errors.email}</p>}
</div>

</div>

<div className="mt-4">
<input type="text" placeholder="Street Address" value={form.address} onChange={set("address")} className={inputClass("address")}/>
{errors.address&&<p className="text-red-500 text-xs mt-1">{errors.address}</p>}
</div>

<div className="grid md:grid-cols-3 gap-4 mt-4">

<div className="relative">
<input type="text" placeholder="ZIP" maxLength="5" value={form.zip} onChange={handleZip} className={inputClass("zip")}/>
{zipLoading && (
<span className="absolute right-3 top-3 text-xs text-brandGreen font-medium flex items-center gap-1 pointer-events-none">
<svg className="animate-spin h-3.5 w-3.5 text-brandGreen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
<circle className="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" strokeWidth="4"></circle>
<path className="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
</svg>
</span>
)}
{errors.zip&&<p className="text-red-500 text-xs mt-1">{errors.zip}</p>}
</div>

<div>
<select value={form.state} onChange={set("state")} className={inputClass("state")}>
<option value="">State</option>
{STATES.map(s=><option key={s}>{s}</option>)}
</select>
{errors.state&&<p className="text-red-500 text-xs mt-1">{errors.state}</p>}
</div>

<div>
<input type="text" placeholder="City" value={form.city} onChange={set("city")} className={inputClass("city")}/>
{errors.city&&<p className="text-red-500 text-xs mt-1">{errors.city}</p>}
</div>

</div>

<div className="mt-5">

<label className="block text-sm font-medium text-gray-700 mb-2">
Message
</label>

<textarea
rows="4"
placeholder="Tell us about your bathroom project..."
value={form.cq1}
onChange={set("cq1")}
className={`border rounded-xl p-3 w-full outline-none transition ${
errors.cq1
? "border-red-500 ring-2 ring-red-200"
: "border-gray-300 focus:ring-2 focus:ring-brandGreen"
}`}
/>

{errors.cq1&&(
<p className="text-red-500 text-xs mt-1">
{errors.cq1}
</p>
)}

</div>

<div className="grid md:grid-cols-2 gap-4 mt-5">

<div>

<label className="block text-sm font-medium text-gray-700 mb-2">
Appointment Date
</label>

<input id="date" placeholder="Preferred Date" className={inputClass("appointment_date")} readOnly/>
{errors.appointment_date&&<p className="text-red-500 text-xs mt-1">{errors.appointment_date}</p>}

</div>

<div>

<label className="block text-sm font-medium text-gray-700 mb-2">
Preferred Time
</label>

<input id="time" placeholder="Select Time" className={inputClass("appointment_time")} readOnly/>
{errors.appointment_time&&<p className="text-red-500 text-xs mt-1">{errors.appointment_time}</p>}

</div>

</div>

<button
onClick={submit}
disabled={status==="loading"}
className="w-full mt-8 py-4 rounded-xl text-white font-semibold disabled:opacity-60 transition"
style={{background:"#04d36f"}}
>
{status==="loading" ? "Submitting..." : "Submit My Request"}
</button>

</div>

</div>

</>

)}

</div>

);

}

ReactDOM.createRoot(document.getElementById("root")).render(<App/>);

</script>

</body>
</html>