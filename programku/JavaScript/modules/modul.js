const nama = "Faqih Mumtaz";

const detail = {
	nama: "Faqih Mumtaz",
	kota: "Tegal",
	hobi: ["membaca", "programming"]
}

export {nama as default, detail};

export const tampilkan = () =>{
	console.log("Saya "+ nama +" asal "+ detail.kota);
}