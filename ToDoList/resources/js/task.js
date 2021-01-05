

window.state = function () {

  const stateList = document.getElementsByName('stateList');
  const progressAll = document.querySelectorAll('.progress');
  const doneAll = document.querySelectorAll('.done');
  const taskAll = document.querySelectorAll('tr.task');

  //ラジオボタンを押した時の処理
  function stateCheck(v1, v2) {
    doneAll.forEach(function (done) {
      const doneList = done.closest('tr.task');
      doneList.style.display = v1;
    });
    progressAll.forEach(function (progress) {
      const progressList = progress.closest('tr.task');
      progressList.style.display = v2;
    });
  }


  if (stateList[1].checked) {
    stateCheck('none', '');
  } else if (stateList[2].checked) {
    stateCheck('', 'none');
  } else {
    taskAll.forEach(task => {
      task.style.display = '';
    });
  }

}
