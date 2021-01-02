

window.state = function () {

  stateList = document.getElementsByName('stateList')

  var stateAll = document.querySelectorAll('.all');
  var doneAll = document.querySelectorAll('.done');
  var progressAll = document.querySelectorAll('.progress');
  //document.getElementsByClassNameでは動かない.

  if (stateList[0].checked) {
    for (var i = 0; i < stateAll.length; i++) {
      stateAll[i].style.display = "";
    }

  } else if (stateList[1].checked) {
    for (var i = 0; i < doneAll.length; i++) {
      doneAll[i].style.display = "none";
    }
    for (var i = 0; i < progressAll.length; i++) {
      progressAll[i].style.display = "";
    }

  } else if (stateList[2].checked) {
    for (var i = 0; i < progressAll.length; i++) {
      progressAll[i].style.display = "none";
    }
    for (var i = 0; i < doneAll.length; i++) {
      doneAll[i].style.display = "";
    }

  }

}
