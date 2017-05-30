
function onClick(event){
  let arrow = document.querySelector(`.arrow[data-row="${event.target.id}"]`);
  let element = document.querySelector(`.x-menu[data-row="${event.target.id}"]`);

  if (element.classList.contains('hidden')) {
    element.className = 'x-menu visible';
    arrow.className = 'arrow rotation';
  } else {
    element.className = 'x-menu hidden';
    arrow.className = 'arrow back';
  }
}

let menuLink = document.querySelectorAll('.menu');

for (var i = 0; i < menuLink.length; i++) {
  //console.log(menuLink[i].id);
  console.log('ff');
  menuLink[i].addEventListener('click', onClick);
}

function onClickNav (event) {
  var show = document.querySelector(`.sub-menu[data-row="${event.target.id}"]`);
  //var red = document.querySelectconsole.log(event.target.id);
  if (show.classList.contains('show')) {
      show.className = 'sub-menu';
    //  red.className = 'wrapper';
  } else {
  show.className = 'sub-menu show';
  //red.className = 'wrapper red';
}
}

let menuParent = document.querySelectorAll('.parent');

for (var i = 0; i < menuParent.length; i++) {
  console.log(menuParent[i]);
  menuParent[i].addEventListener('click', onClickNav);

}
