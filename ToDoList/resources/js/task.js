

window.state = function () {

  const stateList = document.getElementsByName('stateList');

  const progressAll = document.querySelectorAll('.progress');
  const doneAll = document.querySelectorAll('.done');
  const taskAll = document.querySelectorAll('.task');


  if (stateList[1].checked) {

    doneAll.forEach(done => {
      console.log(done);

      done.style.display = 'none';

    });

  } else if (stateList[2].checked) {
    progressAll.forEach(progress => {
      progress.style.display = 'none';
    });

  } else {

    taskAll.forEach(task => {
      task.style.display = '';
    });

  }

}
