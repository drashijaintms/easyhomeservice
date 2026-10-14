

<style>

@media screen and (max-width:768px){
    
    .btn-floating {
  
    font-size: 25px!important;
  
}
}

/* Brand Colors */
:root {
    --brand-green: #04d36f;
    --brand-blue: #000073;
    --brand-green-hover: #03b85f;
    --brand-blue-hover: #000058;
}

/* CTA Section 12 - Floating Action */
.cta-section-12 {
    background-color: #f8f9fa;
}

.floating-cta-box {
    background: white;
    padding: 50px;
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 115, 0.3);
    color: white;
    position: relative;
    overflow: hidden;
}

.floating-cta-box::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 300px;
    height: 300px;
    background: var(--brand-green);
    border-radius: 50%;
    opacity: 0.1;
}

.badge-custom {
    background-color: var(--brand-green);
    color: white;
    padding: 8px 20px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 14px;
    display: inline-block;
}

.floating-cta-box h2 {
    font-size: 32px;
}

.btn-floating {
    background-color: var(--brand-green);
    color: white;
    padding: 9px 24px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 700;
    font-size: 31px;
    display: inline-block;
    transition: all 0.3s 
ease;
    box-shadow: 0 10px 30px rgba(4, 211, 111, 0.3);
    text-align: center;
}

.btn-floating:hover {
    background-color: var(--brand-blue);
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(4, 211, 111, 0.4);
}

</style>
<div class="roofing_section_2 cta-section-12 py-5">
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-11">
        <div class="floating-cta-box">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0 text-left">
                    <span class="badge-custom mb-3">Home Service Expert</span>
                    <h2 class="fw-bold mb-3 color-blue">Speak to Our Home Service Experts NOW!
</h2>
                    <p class="mb-0 text-dark">Our certified specialists are standing by to help you get connected with the perfect home service provider.

</p><div class="font-weight-bold color-blue d-flex flex-wrap gap-3 mt-3 small">
            <span>✓ All Your Home Needs Covered</span>
            <span>✓ Free Consultation</span>
          </div>
                </div>
                <div class="d-grid col-lg-4  text-center text-lg-end" style="
">
                    <a href="tel:+18333809800" class=" btn-floating">
                        <i class="bi bi-telephone"></i>                        <span id="header_call"><span id="header_call" href="">+18333809800</span></span>

                    </a>
                <a href="https://easyhomeservice.com/allservices" class=" btn-floating mt-3">
                                                <i class="bi bi-house me-2"></i><span id="header_call"><span id="header_call" href="">Explore Services</span></span>

                    </a></div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>