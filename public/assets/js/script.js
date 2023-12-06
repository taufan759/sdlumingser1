// PLAIN JS
document.addEventListener('DOMContentLoaded', function () {
    AOS.init();
    var navEl = document.querySelector('.navbar');
    var ddMN = document.querySelector('.dropdown-menu');
    var currentURL = window.location.pathname;

    if (currentURL !== '/'){
        navEl.classList.add('navbar-scrolled')
        ddMN.classList.remove('bg-transparent');
        ddMN.classList.add('bg-dark');
    }else {
        window.addEventListener('scroll', () => {
            if (window.scrollY >= 56) {
                navEl.classList.add('navbar-scrolled');
            } else {
                navEl.classList.remove('navbar-scrolled');
            }
        });
    }


});


// JQUERY
$(document).ready(function () {
    animateText();
});

function animateText() {
    var textElement = $('.typing-text');
    var textQueue = ["Sekolah Kami", "SDN Kesamiran 01"];
    var currentText = "";

    typeText();

    function typeText() {
        if (textQueue.length > 0) {
            var currentPhrase = textQueue.shift();
            typePhrase(currentPhrase);
        } else {
            // All phrases typed, start over
            setTimeout(function () {
                textQueue = ["Sekolah Kami", "SDN Kesamiran 01"];
                typeText();
            }, 1000); // Wait for 1000ms (1 second) before starting over
        }
    }

    function typePhrase(phrase) {
        currentText = "Selamat Datang di ";
        textElement.text(currentText);

        function typingLoop(index) {
            if (index < phrase.length) {
                currentText += phrase.charAt(index);
                textElement.text(currentText);
                setTimeout(function () {
                    typingLoop(index + 1);
                }, 100); // Adjust the delay (100ms in this case) as needed
            } else {
                // Continue displaying "Selamat Datang di" while waiting to start the next phrase
                setTimeout(function () {
                    deleteText(phrase);
                }, 1000); // Wait for 1000ms (1 second) before starting deletion
            }
        }

        typingLoop(0);
    }

    function deleteText(phrase) {
        function deletingLoop(index) {
            if (index >= "Selamat Datang di ".length) {
                currentText = currentText.slice(0, -1);
                textElement.text(currentText);
                setTimeout(function () {
                    deletingLoop(index - 1);
                }, 100); // Adjust the delay (100ms in this case) as needed
            } else {
                typeText(); // Start typing the next phrase
            }
        }

        deletingLoop(currentText.length - 1);
    }
}
