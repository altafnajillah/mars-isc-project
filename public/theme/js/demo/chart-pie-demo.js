// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

var ctx = document.getElementById("myPieChart").getContext('2d');
var myPieChart = new Chart(ctx, {
  type: 'doughnut', // Jenis grafik doughnut
  data: {
    labels: ["Angkatan 24", "Angkatan 22", "Angkatan 23"], // Label berdasarkan angkatan
    datasets: [{
      data: [43, 3, 10], // Jumlah peserta per angkatan
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'], // Warna tiap bagian
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'], // Warna saat hover
      hoverBorderColor: "rgba(234, 236, 244, 1)", // Border saat hover
    }],
  },
  options: {
    maintainAspectRatio: false, // Memastikan grafik responsif
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false, // Menyembunyikan warna
      caretPadding: 10,
    },
    legend: {
      display: true, // Menampilkan legenda
      position: 'top' // Posisi legenda di atas
    },
    cutoutPercentage: 80, // Membuat bagian tengah grafik lebih besar
  },
});


// Pie Chart Example
// var ctx = document.getElementById("myPieChart");
// var myPieChart = new Chart(ctx, {
//   type: 'doughnut',
//   data: {
//     labels: ["Direct", "Referral", "Social"],
//     datasets: [{
//       data: [55, 30, 15],
//       backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
//       hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
//       hoverBorderColor: "rgba(234, 236, 244, 1)",
//     }],
//   },
//   options: {
//     maintainAspectRatio: false,
//     tooltips: {
//       backgroundColor: "rgb(255,255,255)",
//       bodyFontColor: "#858796",
//       borderColor: '#dddfeb',
//       borderWidth: 1,
//       xPadding: 15,
//       yPadding: 15,
//       displayColors: false,
//       caretPadding: 10,
//     },
//     legend: {
//       display: false
//     },
//     cutoutPercentage: 80,
//   },
// });
