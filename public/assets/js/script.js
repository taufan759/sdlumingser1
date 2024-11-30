// PLAIN JS
document.addEventListener('DOMContentLoaded', function () {
    AOS.init();
    const Swal = require('sweetalert2');
});
window.addEventListener("scroll", function() {
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

function kirimPesan() {
    var nama = document.getElementById('nama').value;
    var pesan = document.getElementById('pesan').value;

    if (nama === '' && pesan === '') {
        Swal.fire({
            icon: "error",
            title: "Peringatan",
            text: "Silakan isi nama dan pesan terlebih dahulu.",
        });
        return;
    } else if (nama === '') {
        Swal.fire({
            icon: "error",
            title: "Peringatan",
            text: "Silakan isi nama terlebih dahulu.",
        });
        return;
    } else if (pesan === '') {
        Swal.fire({
            icon: "error",
            title: "Peringatan",
            text: "Silakan isi pesan terlebih dahulu.",
        });
        return;
    }
    // Membuat pesan yang berisi informasi dari form
    var whatsappPesan = "Nama : " + encodeURI(nama) + "%0aPesan : " + encodeURI(pesan);

    // Mengarahkan pengguna ke WhatsApp dengan pesan yang sudah dibuat
    window.open("https://api.whatsapp.com/send?phone=6283124332900&text=" + whatsappPesan,'_blank'); // UBAH NOMOR WHATSAPP
};

// JQUERY
$(document).ready(function () {
    animateText();
});

function animateText() {
    var textElement = $('.typing-text');
    var textQueue = ["Sekolah Kami", "SDN Lumingser 01"];
    var currentText = "";

    typeText();

    function typeText() {
        if (textQueue.length > 0) {
            var currentPhrase = textQueue.shift();
            typePhrase(currentPhrase);
        } else {
            // All phrases typed, start over
            setTimeout(function () {
                textQueue = ["Sekolah Kami", "SDN Lumingser 01"];
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