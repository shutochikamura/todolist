
window.state = function state() {

  stateList = document.getElementsByName('stateList')
  progress = document.getElementById("progress");
  all = document.getElementById("all");
  done = document.getElementById("done");
  var prog = document.getElementsByClassName("progress");
  var don = document.getElementsByClassName("done");
  var stateAll = document.getElementsByClassName("all");

  //あるかどうかのtrue
  if (stateList[0].checked) {
    for (var i = 0; i < stateAll.length; i++) {

      stateAll[i].style.display = "";
    }

  } else if (stateList[1].checked) {
    for (var i = 0; i < stateAll.length; i++) {



      don[i].style.display = "none"
    }



  } else if (stateList[2].checked) {

    for (var i = 0; i < stateAll.length; i++) {
      if (progress.classList.contains("progress") != null) {

        console.log('progress');
        all.className = 'progress';
      } else {
        console.log('false');
        continue;
      }


      prog[i].style.display = "none";


    }



  }
}
