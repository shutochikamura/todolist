var progress = document.getElementById('progress').style.display;
var done = document.getElementById('done').style.display;
function state(progress, done) {
  state = document.getElementsByName('stateList')
  if (state[0].checked) {
    progress = "";
    done = "";
  } else if (state[1].checked) {
    progress = "";
    done = "none";
  } else if (state[2].checked) {
    progress = "none";
    done = "";
  }
}
window.addEventListener('load', state());
