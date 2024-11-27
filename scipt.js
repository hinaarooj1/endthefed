document.addEventListener("DOMContentLoaded", () => {
    const heroIntro = document.getElementById("hero-intro");

    // Show the hero intro after 4 seconds
    setTimeout(() => {
        heroIntro.classList.add("visible");
    }, 4000);

    // Hide the hero intro after 2 seconds of being visible
    setTimeout(() => {
        heroIntro.classList.remove("visible");
        heroIntro.classList.add("hidden");
    }, 6000); // 4 seconds delay + 2 seconds visibility
});

    // Copy the value of the input to clipboard when the button is clicked
document.getElementById("copy-address-btn").addEventListener("click", function () {
    const contractAddressInput = document.getElementById("contract-address-input");

    // Use Clipboard API
    if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(contractAddressInput.value).catch((err) => {
            console.error("Failed to copy: ", err);
        });
    } else {
        // Fallback for older browsers
        contractAddressInput.select();
        contractAddressInput.setSelectionRange(0, 99999); // For mobile compatibility
        try {
            document.execCommand("copy");
        } catch (err) {
            console.error("Fallback copy failed: ", err);
        }
        // Deselect the text after copying
        window.getSelection().removeAllRanges();
    }
});