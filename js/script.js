// Wait for DOM to load
document.addEventListener("DOMContentLoaded", () => {
    // SweetAlert2 for Form Validation
    const forms = document.querySelectorAll("form");
    forms.forEach((form) => {
        form.addEventListener("submit", (e) => {
            // Validate all required inputs
            const inputs = form.querySelectorAll("input[required]");
            let isValid = true;

            inputs.forEach((input) => {
                if (!input.value.trim()) {
                    e.preventDefault();
                    isValid = false;

                    Swal.fire({
                        title: "Error!",
                        text: `${input.placeholder || "This field"} is required.`,
                        icon: "error",
                        confirmButtonText: "OK",
                    });
                }
            });

            if (!isValid) return;
        });
    });

    // Copy Lifafa URL to Clipboard (Dynamic Action)
    const copyButtons = document.querySelectorAll(".copy-url");
    copyButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const url = button.getAttribute("data-url");
            if (url) {
                navigator.clipboard.writeText(url).then(() => {
                    Swal.fire({
                        title: "Copied!",
                        text: "The Lifafa URL has been copied to your clipboard.",
                        icon: "success",
                        confirmButtonText: "OK",
                    });
                }).catch(() => {
                    Swal.fire({
                        title: "Error!",
                        text: "Failed to copy the URL. Please try again.",
                        icon: "error",
                        confirmButtonText: "OK",
                    });
                });
            }
        });
    });

    // Handle Access Code Validation in Claim Form
    const claimForm = document.querySelector("#claim-form");
    if (claimForm) {
        claimForm.addEventListener("submit", (e) => {
            const accessCode = document.querySelector("#access_code");
            if (accessCode && accessCode.value.trim().length < 6) {
                e.preventDefault();
                Swal.fire({
                    title: "Error!",
                    text: "Access Code must be at least 6 characters.",
                    icon: "error",
                    confirmButtonText: "OK",
                });
            }
        });
    }

    // Alert for Successful Lifafa Creation
    const successMessage = document.querySelector("#success-message");
    if (successMessage) {
        Swal.fire({
            title: "Lifafa Created!",
            text: successMessage.innerText,
            icon: "success",
            confirmButtonText: "OK",
        });
    }

    // Alert for Errors
    const errorMessage = document.querySelector("#error-message");
    if (errorMessage) {
        Swal.fire({
            title: "Error!",
            text: errorMessage.innerText,
            icon: "error",
            confirmButtonText: "OK",
        });
    }
});
