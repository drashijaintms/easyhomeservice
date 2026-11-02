/* =====================================
   HARD BASE DOMAIN (NOT USED FOR BUILDING)
===================================== */

const isLocal = window.location.hostname === "localhost" || window.location.hostname === "127.0.0.1";
const domain = isLocal ? window.location.origin : "https://easyhomeservice.com";


/* =====================================
   HVAC LINKS ARRAY (WHITELIST ONLY)
===================================== */

const hvacLinks = {
AL: domain + "/alabama/hvac-services-in-alabama",
AK: domain + "/alaska/hvac-services-in-alaska",
AZ: domain + "/arizona/hvac-services-in-arizona",
AR: domain + "/arkansas/hvac-services-in-arkansas",
CA: domain + "/california/hvac-services-in-california",
CO: domain + "/colorado/hvac-services-in-colorado",
CT: domain + "/connecticut/hvac-services-in-connecticut",
DE: domain + "/delaware/hvac-services-in-delaware",
FL: domain + "/florida/hvac-services-in-florida",
GA: domain + "/georgia/hvac-services-in-georgia",
HI: domain + "/hawaii/hvac-services-in-hawaii",
ID: domain + "/idaho/hvac-services-in-idaho",
IL: domain + "/illinois/hvac-services-in-illinois",
IN: domain + "/indiana/hvac-services-in-indiana",
IA: domain + "/iowa/hvac-services-in-iowa",
KS: domain + "/kansas/hvac-services-in-kansas",
KY: domain + "/kentucky/hvac-services-in-kentucky",
LA: domain + "/louisiana/hvac-services-in-louisiana",
ME: domain + "/maine/hvac-services-in-maine",
MD: domain + "/maryland/hvac-services-in-maryland",
MA: domain + "/massachusetts/hvac-services-in-massachusetts",
MI: domain + "/michigan/hvac-services-in-michigan",
MN: domain + "/minnesota/hvac-services-in-minnesota",
MS: domain + "/mississippi/hvac-services-in-mississippi",
MO: domain + "/missouri/hvac-services-in-missouri",
MT: domain + "/montana/hvac-services-in-montana",
NE: domain + "/nebraska/hvac-services-in-nebraska",
NV: domain + "/nevada/hvac-services-in-nevada",
NH: domain + "/new-hampshire/hvac-services-in-new-hampshire",
NJ: domain + "/new-jersey/hvac-services-in-new-jersey",
NM: domain + "/new-mexico/hvac-services-in-new-mexico",
NY: domain + "/new-york/hvac-services-in-new-york",
NC: domain + "/north-carolina/hvac-services-in-north-carolina",
ND: domain + "/north-dakota/hvac-services-in-north-dakota",
OH: domain + "/ohio/hvac-services-in-ohio",
OK: domain + "/oklahoma/hvac-services-in-oklahoma",
OR: domain + "/oregon/hvac-services-in-oregon",
PA: domain + "/pennsylvania/hvac-services-in-pennsylvania",
RI: domain + "/rhode-island/hvac-services-in-rhode-island",
SC: domain + "/south-carolina/hvac-services-in-south-carolina",
SD: domain + "/south-dakota/hvac-services-in-south-dakota",
TN: domain + "/tennessee/hvac-services-in-tennessee",
TX: domain + "/texas/hvac-services-in-texas",
UT: domain + "/utah/hvac-services-in-utah",
VT: domain + "/vermont/hvac-services-in-vermont",
VA: domain + "/virginia/hvac-services-in-virginia",
WA: domain + "/washington/hvac-services-in-washington",
WV: domain + "/west-virginia/hvac-services-in-west-virginia",
WI: domain + "/wisconsin/hvac-services-in-wisconsin",
WY: domain + "/wyoming/hvac-services-in-wyoming"
};


/* =====================================
   PLUMBING LINKS ARRAY (WHITELIST ONLY)
===================================== */

const plumbingLinks = {};

Object.keys(hvacLinks).forEach(code => {
plumbingLinks[code] = hvacLinks[code]
.replace("hvac-services-in", "plumbing-experts-in");
});

const stateNameToCode = {
    "Alabama": "AL", "Alaska": "AK", "Arizona": "AZ", "Arkansas": "AR", "California": "CA",
    "Colorado": "CO", "Connecticut": "CT", "Delaware": "DE", "Florida": "FL", "Georgia": "GA",
    "Hawaii": "HI", "Idaho": "ID", "Illinois": "IL", "Indiana": "IN", "Iowa": "IA",
    "Kansas": "KS", "Kentucky": "KY", "Louisiana": "LA", "Maine": "ME", "Maryland": "MD",
    "Massachusetts": "MA", "Michigan": "MI", "Minnesota": "MN", "Mississippi": "MS", "Missouri": "MO",
    "Montana": "MT", "Nebraska": "NE", "Nevada": "NV", "New Hampshire": "NH", "New Jersey": "NJ",
    "New Mexico": "NM", "New York": "NY", "North Carolina": "NC", "North Dakota": "ND", "Ohio": "OH",
    "Oklahoma": "OK", "Oregon": "OR", "Pennsylvania": "PA", "Rhode Island": "RI", "South Carolina": "SC",
    "South Dakota": "SD", "Tennessee": "TN", "Texas": "TX", "Utah": "UT", "Vermont": "VT",
    "Virginia": "VA", "Washington": "WA", "West Virginia": "WV", "Wisconsin": "WI", "Wyoming": "WY"
};


/* =====================================
   HOVER EFFECT (ALWAYS WORKS)
===================================== */

if (typeof $ !== "undefined" || typeof jQuery !== "undefined") {
    const $jq = window.jQuery || window.$;
    $jq(document).on("mouseenter", "li.ccc", function () {
        $jq("li.ccc").removeClass("active");
        $jq(this).addClass("active");
    });
    $jq(document).on("mouseenter", ".ehs-states-wrapper .ehs-state-item", function () {
        $jq(".ehs-states-wrapper .ehs-state-item").removeClass("active");
        $jq(this).addClass("active");
    });
}


/* =====================================
   LINK INSERTION (STRICT MATCH ONLY)
===================================== */

function initMapLinks() {
    const path = window.location.pathname.toLowerCase();

    let linkSet = null;

    if (path.includes("hvac")) linkSet = hvacLinks;
    if (path.includes("plumbing")) linkSet = plumbingLinks;

    /* If not HVAC or Plumbing -> stop. */
    if (!linkSet) return;

    // 1. Support legacy li.ccc list
    if (typeof $ !== "undefined" || typeof jQuery !== "undefined") {
        const $jq = window.jQuery || window.$;
        $jq("li.ccc").each(function () {
            const code = $jq(this).attr("class")
                .split(" ")
                .find(c => c !== "ccc");

            if (!code || !linkSet[code]) return; // STRICT MATCH ONLY

            const url = linkSet[code];

            if (!$jq(this).find("a").length) {
                $jq(this).wrapInner(`<a href="${url}"></a>`);
            }
        });
    }

    // 2. Support state-cities.php new map States section
    const stateItems = document.querySelectorAll(".ehs-states-wrapper .ehs-state-item");
    stateItems.forEach(function (item) {
        const nameEl = item.querySelector(".ehs-state-name");
        const stateName = nameEl ? nameEl.textContent.trim() : "";
        const classCode = item.className ? item.className.split(" ").find(function (c) {
            return c !== "ehs-state-item" && c !== "active";
        }) : null;
        const code = item.getAttribute("data-code") || classCode || stateNameToCode[stateName];

        if (!code || !linkSet[code]) return; // STRICT MATCH ONLY

        const url = linkSet[code];

        if (!item.querySelector("a")) {
            const a = document.createElement("a");
            a.href = url;
            a.className = "ehs-state-link";
            while (item.firstChild) {
                a.appendChild(item.firstChild);
            }
            item.appendChild(a);
        }
    });
}

if (typeof jQuery !== "undefined") {
    jQuery(document).ready(initMapLinks);
} else if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initMapLinks);
} else {
    initMapLinks();
}
