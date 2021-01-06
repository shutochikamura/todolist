function stateChange() {

  const stateList = document.getElementsByName('stateList');
  const progressAll = document.querySelectorAll('.progress');
  const doneAll = document.querySelectorAll('.done');
  const taskAll = document.querySelectorAll('.task');

  if (stateList[1].checked) {
    doneAll.forEach(item => {
      item.closest('.task').style.display = 'none';
    });
    progressAll.forEach(item => {
      item.closest('.task').style.display = '';
    });
  } else if (stateList[2].checked) {
    doneAll.forEach(item => {
      item.closest('.task').style.display = '';
    });
    progressAll.forEach(item => {
      item.closest('.task').style.display = 'none';
    });
  } else {
    taskAll.forEach(task => {
      task.style.display = '';
    });
  }
}
window.addEventListener("click", stateChange);
