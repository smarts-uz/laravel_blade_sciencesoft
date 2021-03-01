function Tab(e, val){
    var i, links, value
    var classes = " text-blue-500 border-l-8 border-blue-500 duration-300 bg-gray-50"

    value = document.getElementsByClassName("content");
    for(i = 0; i < value.length; i++){
      value[i].style.display = 'none'
    }

    links = document.getElementsByClassName('link');
    for(i = 0; i < links.length; i++){
      links[i].className = links[i].className.replace(classes, "")
    }

    document.getElementById(val).style.display = 'block'
    e.target.className += classes;
  }
