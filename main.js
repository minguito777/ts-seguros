document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.parallax');
    let instances = M.Parallax.init(elems, options);
  });

  var instance = M.Parallax.getInstance(elem);