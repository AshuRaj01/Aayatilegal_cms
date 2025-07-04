<style>
    :root {
        --whatsapp: #25D366;
        --call: #1a365d;
        --secondary: #e2b979;
    }

    .floating-buttons {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 100;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .floating-buttons a {
        text-decoration: none;
        color: white;
        font-size: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .floating-btn {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        border: none;
    }

    .floating-btn:hover {
        transform: translateY(-5px) scale(1.05);
    }

    .floating-btn.whatsapp {
        background-color: var(--whatsapp);
    }

    .floating-btn.call {
        background-color: var(--call);
    }

    .floating-btn .tooltip {
        position: absolute;
        right: 70px;
        background: white;
        padding: 8px 12px;
        border-radius: 5px;
        font-size: 14px;
        color: #333;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s ease;
        white-space: nowrap;
    }

    .floating-btn .tooltip:after {
        content: '';
        position: absolute;
        right: -5px;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        height: 0;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid white;
    }

    .floating-btn:hover .tooltip {
        opacity: 1;
        right: 80px;
    }

    @media (max-width: 768px) {
        .floating-buttons {
            bottom: 20px;
            right: 20px;
        }

        .floating-btn {
            width: 50px;
            height: 50px;
            font-size: 20px;
        }
    }
</style>
<!-- Floating Action Buttons -->
<div class="floating-buttons">
    <a href="tel:+918800184922" class="floating-btn call">
        <i class="fas fa-phone"></i>
        <span class="tooltip">Call Us Now</span>
    </a>
    <a href="https://wa.me/+918800184922" class="floating-btn whatsapp">
        <i class="fab fa-whatsapp"></i>
        <span class="tooltip">Chat on WhatsApp</span>
    </a>
</div>