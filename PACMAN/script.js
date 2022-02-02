document.addEventListener('DOMContentLoaded', ()=>{
  const grid=document.querySelector('.grid')
  const scoreDisplay=document.getElementById('score') 
  const width=28 // 28x28=784 squares
  let score= 0

  //layout of grid and what is in the square

  const layout = [
    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
    1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0,
    0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1,
    1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 3, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 0,
    1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 3, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0,
    1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0,
    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 0,
    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1,
    1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1,
    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
    0, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1,
    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1,
    1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 4, 1, 1, 1, 2, 2, 1, 1,
    1, 4, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 4, 1, 2, 2, 2,
    2, 2, 2, 1, 4, 1, 1, 0, 1, 1, 1, 1, 1, 1, 4, 4, 4, 4, 4, 4, 0, 0, 0, 4, 1,
    2, 2, 2, 2, 2, 2, 1, 4, 0, 0, 0, 4, 4, 4, 4, 4, 4, 1, 1, 1, 1, 1, 1, 0, 1,
    1, 4, 1, 2, 2, 2, 2, 2, 2, 1, 4, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
    1, 0, 1, 1, 4, 1, 1, 1, 1, 1, 1, 1, 1, 4, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1,
    1, 1, 1, 1, 0, 1, 1, 4, 1, 1, 1, 1, 1, 1, 1, 1, 4, 1, 1, 0, 1, 1, 1, 1, 1,
    1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0,
    0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1,
    0, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1,
    1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 3, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0,
    0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 3, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 0, 1, 1,
    1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1,
    0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0,
    0, 1, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1,
    1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1,
    1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1,
    1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
    0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
    1, 1, 1, 1, 1, 1, 1, 1, 1,
  ]

  const squares=[]
  //Legend
  //0- pac dots
  //1-wall
  //2-ghost lair
  //3-power ball
  //4-empty

  //draw the grid and render it

  function createBoard(){
      for(let i=0; i<layout.length;i++){
          const square=document.createElement('div')
          grid.appendChild(square)
          squares.push(square)

          //add layout 
          if(layout[i]===0){
              squares[i].classList.add('pac-dot')
          }else if(layout[i]===1){
              squares[i].classList.add('wall')
          }else if(layout[i]===2){
              squares[i].classList.add('ghost-lair')
          }else if(layout[i]===3){
              squares[i].classList.add('power-ball')
          }

      }
  }

  createBoard()

  //starting position of pacman

  let pacmanCurrentIndex=401

  squares[pacmanCurrentIndex].classList.add('pac-man')

  //move pac-man

  function movePacman(e){
      squares[pacmanCurrentIndex].classList.remove('pac-man')

      switch(e.keyCode){
          case 37:
        if(pacmanCurrentIndex % width !==0 && 
        !squares[pacmanCurrentIndex -1].classList.contains('wall') &&  
        !squares[pacmanCurrentIndex -1].classList.contains('ghost-lair'))
        pacmanCurrentIndex -=1
        if((pacmanCurrentIndex -1)===363){
            pacmanCurrentIndex=391
        }
        break
        case 38:
        if (
          pacmanCurrentIndex - width >= 0 &&
          !squares[pacmanCurrentIndex - width].classList.contains("wall") &&
          !squares[pacmanCurrentIndex - width].classList.contains("ghost-lair")
        )
          pacmanCurrentIndex -= width;
        break
        case 39:
        if (
          pacmanCurrentIndex % width < width - 1 &&
          !squares[pacmanCurrentIndex + 1].classList.contains("wall") &&
          !squares[pacmanCurrentIndex + 1].classList.contains("ghost-lair")
        )
          pacmanCurrentIndex += 1;
          if(pacmanCurrentIndex +1 ===392){
              pacmanCurrentIndex = 364
          }
        break
        case 40:
        if (
          pacmanCurrentIndex + width < width * width &&
          !squares[pacmanCurrentIndex + width].classList.contains("wall") &&
          !squares[pacmanCurrentIndex + width].classList.contains("ghost-lair")
        )
          pacmanCurrentIndex += width;
        break
      }

      squares[pacmanCurrentIndex].classList.add('pac-man')

      pacDotEaten()
      powerBallEaten()
      checkForGameOver()
      checkFroWin()

      
  }

  document.addEventListener("keyup", movePacman);

  // when pac-man eat dot

  function pacDotEaten(){
      if(squares[pacmanCurrentIndex].classList.contains('pac-dot')){
          score++
          scoreDisplay.innerHTML = score;
          squares[pacmanCurrentIndex].classList.remove('pac-dot')
      }
  }

  // when you eat a power ball

  function powerBallEaten(){
      if(squares[pacmanCurrentIndex].classList.contains('power-ball')){
          score +=10
          ghosts.forEach(ghost =>ghost.isScared=true)
          setTimeout(unScareGhosts,10000)
          squares[pacmanCurrentIndex].classList.remove('power-ball')
      }
  }

  //unscare the ghost

  function unScareGhosts(){
      ghosts.forEach(ghost =>ghost.isScared=false)
  }




  // create ghost
  class Ghost{
      constructor(className, startIndex, speed){
          this.className=className
          this.startIndex=startIndex
          this.speed=speed
          this.currentIndex=startIndex
          this.timerId=NaN
          this.isScared=false
      }
  }

  ghosts=[
      new Ghost('ghost1',348,250),
      new Ghost('ghost2',376,400),
      new Ghost('ghost3',351,300),
      new Ghost('ghost4',379,500)
  ]


  //draw the ghost

  ghosts.forEach(ghost=>{
      squares[ghost.currentIndex].classList.add(ghost.className)
      squares[ghost.currentIndex].classList.add('ghost')
  })

  //move ghost
  ghosts.forEach(ghost=>moveGhost(ghost))

  //function to move the ghost

  function moveGhost(ghost){
      const directions=[-1, +1, width, -width]
      let direction= directions[Math.floor(Math.random() * directions.length)] 

      ghost.timerId=setInterval(function(){
        // if the direction of the ghost does not contain a wall or ghost
        if(!squares[ghost.currentIndex + direction].classList.contains('wall')&& 
        !squares[ghost.currentIndex + direction].classList.contains('ghost')){
            //the ghost can go
            //remove all ghost related classes
            squares[ghost.currentIndex].classList.remove(ghost.className,'ghost','scared-ghost')
            //change the currindex to the safe square
            ghost.currentIndex += direction
            //redraw the ghost in the new space
            squares[ghost.currentIndex].classList.add(ghost.className,'ghost')
        } 
        //else find new direction
        else direction=directions[Math.floor(Math.random() * directions.length)]

        //if the ghost isScared is true
        if(ghost.isScared){
            squares[ghost.currentIndex].classList.add('scared-ghost')
        }

        //if a ghost is eaten

        if(ghost.isScared && squares[ghost.currentIndex].classList.contains('pac-man')){
            squares[ghost.currentIndex].classList.remove(ghost.className,'ghost','scared-ghost')
            ghost.currentIndex=ghost.startIndex
            squares[ghost.currentIndex].classList.add(ghost.className,'ghost')
        }
        checkForGameOver();

      },ghost.speed)
  }


  function checkForGameOver(){
      if(squares[pacmanCurrentIndex].classList.contains('ghost') && 
      !squares[pacmanCurrentIndex].classList.contains('scared-ghost')){
          ghosts.forEach(ghost => clearInterval(ghost.timerId))
          document.removeEventListener('keyup',movePacman)
          scoreDisplay.innerHTML='Game Over'
      }
  }

  function checkFroWin(){
      if (score == 274) {
        ghosts.forEach((ghost) => clearInterval(ghost.timerId));
        document.removeEventListener("keyup", movePacman);
        scoreDisplay.innerHTML = "YOU WON!";
      }
  }







})