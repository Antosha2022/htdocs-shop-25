
#addToCartSelect{
  let cordI=0;
  let clicks = 1;
  function clickPlus() {clicks +=1;
    document.getElementById("clicks").innerHTML = clicks;}

  function clickMinus() {clicks -=1 ;
      document.getElementById("clicks").innerHTML = clicks;}
}
