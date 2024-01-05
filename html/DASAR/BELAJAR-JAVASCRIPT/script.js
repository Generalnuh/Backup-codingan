let namaMahasiswa = "Muhammad Nuh";
console.log("Nama: " + namaMahasiswa);

const namaPegawai = "Jarot";
let usia = 19;
let tinggiBadan = 170.5;
let sukaNgoding = false;
let mahasiswa = ["joko", "cotomate", "jajang"];
let pegawai = {
  nama: "generalnoeh",
  usia: 19,
  hoby: "None😭",
};

function penjumlahan(a, b) {
  return a + b;
}
penjumlahan(100, 10);
console.log(penjumlahan(100, 10));

function munculkanAlert() { 
  alert("Halo saya GeneralNoeh :)");
}

let umur = 19;
if (umur < 18) {
  alert("usia belum mencukupi");
} else if (umur > 18) {
  alert("anda diizinkan masuk");
}