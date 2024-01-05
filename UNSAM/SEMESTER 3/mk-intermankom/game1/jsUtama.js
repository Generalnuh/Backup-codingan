const playBoard = document.querySelector(".play-board");
const scoreElement = document.querySelector(".score");
const highScoreElement = document.querySelector(".Score-Tertinggi");
const controls = document.querySelectorAll(".controls i");

let gameOver = false;
let makananX, makananY;
let ularX = 5,
  ularY = 5;
let velocityX = 0,
  velocityY = 0;
let snakeBody = [];
let setIntervalId;
let score = 0;

let highScore = localStorage.getItem("Score-Tertinggi") || 0;
highScoreElement.innerText = `Score Tertinggi: ${highScore}`;

const updateFoodPosition = () => {
  makananX = Math.floor(Math.random() * 30) + 1;
  makananY = Math.floor(Math.random() * 30) + 1;
};

const handleGameOver = () => {
  clearInterval(setIntervalId);
  alert("Tekan Ok Jika Ingin Kembali Bermain🗿👍");
  location.reload();
};

const changeDirection = (e) => {
  if (e.key === "ArrowUp" && velocityY != 1) {
    velocityX = 0;
    velocityY = -1;
  } else if (e.key === "ArrowDown" && velocityY != -1) {
    velocityX = 0;
    velocityY = 1;
  } else if (e.key === "ArrowLeft" && velocityX != 1) {
    velocityX = -1;
    velocityY = 0;
  } else if (e.key === "ArrowRight" && velocityX != -1) {
    velocityX = 1;
    velocityY = 0;
  }
};

controls.forEach((button) =>
  button.addEventListener("click", () =>
    changeDirection({ key: button.dataset.key })
  )
);

const initGame = () => {
  if (gameOver) return handleGameOver();
  let html = `<div class="food" style="grid-area: ${makananY} / ${makananX}"></div>`;

  if (ularX === makananX && ularY === makananY) {
    updateFoodPosition();
    snakeBody.push([makananY, makananX]); 
    score++;
    highScore = score >= highScore ? score : highScore; 

    localStorage.setItem("Score-Tertinggi", highScore);
    scoreElement.innerText = `Score: ${score}`;
    highScoreElement.innerText = `Score Tertinggi: ${highScore}`;
  }

  ularX += velocityX;
  ularY += velocityY;


  for (let i = snakeBody.length - 1; i > 0; i--) {
    snakeBody[i] = snakeBody[i - 1];
  }

  snakeBody[0] = [ularX, ularY];


  if (ularX <= 0 || ularX > 30 || ularY <= 0 || ularY > 30) {
    return (gameOver = true);
  }

  for (let i = 0; i < snakeBody.length; i++) {
    html += `<div class="head" style="grid-area: ${snakeBody[i][1]} / ${snakeBody[i][0]}"></div>`;
    if (
      i !== 0 &&
      snakeBody[0][1] === snakeBody[i][1] &&
      snakeBody[0][0] === snakeBody[i][0]
    ) {
      gameOver = true;
    }
  }
  playBoard.innerHTML = html;
};

updateFoodPosition();
setIntervalId = setInterval(initGame, 150);
document.addEventListener("keyup", changeDirection);