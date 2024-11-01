// let index = 0;
// let total = 10;
// let show = 5;
// let arr = [];

// function arraySet() {
//     if (index >= total) {
//         index = 0;
//     }
//     // arr = []; // Reset array setiap kali diupdate
//     for (let x = 0; x < show; x++) {
//         arr[x] = (index + x) % total;
//     }
// }

// function cardUpdate(array) {
//     // Sembunyikan semua kartu terlebih dahulu dengan animasi
//     for (let z = 0; z < total; z++) {
//         const card = document.getElementById('cardAnimation' + z);
//         card.classList.add('animate__animated'); // Animasi keluar
//         setTimeout(() => {
//             card.classList.add('d-none'); // Menyembunyikan kartu setelah animasi
//         }, 500); // Waktu tunggu sesuai dengan durasi animasi

//         Array.from(card.classList).forEach(className => {
//             if (className.startsWith('order-')) {
//                 card.classList.remove(className);
//             }
//         });
//     }

//     for (let z = 0; z < array.length; z++) {
//         const card = document.getElementById('cardAnimation' + array[z]);
//         card.classList.remove('d-none');
//         if (z === array.length) {
//             card.classList.add('animate__fadeIn');
//         }
//         card.classList.add('order-' + z);
//     }
// }
// setInterval(() => {
//     arraySet();
//     cardUpdate(arr);
//     console.log(index);
//     console.log(arr);
//     index++;
// }, 1000);

// Membuat 10 array kartu, masing-masing berisi 3 kartu
const cards = [
    ['Card 0-0', 'Card 0-1', 'Card 0-2'], // Array 0
    ['Card 1-0', 'Card 1-1', 'Card 1-2'], // Array 1
    ['Card 2-0', 'Card 2-1', 'Card 2-2'], // Array 2
    ['Card 3-0', 'Card 3-1', 'Card 3-2'], // Array 3
    ['Card 4-0', 'Card 4-1', 'Card 4-2'], // Array 4
    ['Card 5-0', 'Card 5-1', 'Card 5-2'], // Array 5
    ['Card 6-0', 'Card 6-1', 'Card 6-2'], // Array 6
    ['Card 7-0', 'Card 7-1', 'Card 7-2'], // Array 7
    ['Card 8-0', 'Card 8-1', 'Card 8-2'], // Array 8
    ['Card 9-0', 'Card 9-1', 'Card 9-2'], // Array 9
];

// Pilih 5 array untuk ditampilkan
const selectedArrays = [cards[0], cards[1], cards[2], cards[3], cards[4]];

function cardUpdate(selectedArrays) {
    // Sembunyikan semua kartu terlebih dahulu dengan animasi
    for (let z = 0; z < selectedArrays.length; z++) {
        const cardArray = selectedArrays[z];

        // Sembunyikan kartu dengan indeks 0
        const cardToHide = document.getElementById('cardAnimation' + cardArray[0]);
        if (cardToHide) {
            cardToHide.classList.add('animate__animated', 'animate__fadeOut');
            setTimeout(() => {
                cardToHide.classList.add('d-none'); // Menyembunyikan kartu setelah animasi
            }, 500);
        }

        // Tampilkan kartu dari indeks 1 hingga 3
        for (let i = 1; i <= 3; i++) {
            const cardToShow = document.getElementById('cardAnimation' + cardArray[i]);
            if (cardToShow) {
                cardToShow.classList.remove('d-none');
                cardToShow.classList.remove('animate__fadeOut');
                cardToShow.classList.add('animate__animated', 'animate__fadeIn');
            }
        }

        // Siapkan kartu di indeks 4
        const cardToPrepare = document.getElementById('cardAnimation' + cardArray[4]);
        if (cardToPrepare) {
            cardToPrepare.classList.remove('d-none');
            cardToPrepare.classList.remove('animate__fadeIn');
            // Anda bisa menambahkan kelas untuk animasi masuk di sini jika diperlukan
        }
    }
}

// Memanggil fungsi untuk memperbarui kartu
cardUpdate(selectedArrays);
