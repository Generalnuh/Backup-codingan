let ratioWidth = document.getElementById("ratio-width")
let ratioHeight = document.getElementById("ratio-height")
let width = document.getElementById("width")
let height = document.getElementById("height")

let hitungLebar = () => {
  let aspectRatio = ratioWidth.value / ratioHeight.value;
  width.value = parseFloat((height.value * aspectRatio).toFixed(2))
}

let hitungTinggi = () => {
  let aspectRatio = ratioWidth.value / ratioHeight.value;
  height.value = parseFloat((width.value / aspectRatio).toFixed(2))
}

height.addEventListener("input", hitungLebar)
width.addEventListener("input", hitungTinggi)
ratioHeight.addEventListener("input", hitungLebar)
ratioWidth.addEventListener("input", hitungTinggi)