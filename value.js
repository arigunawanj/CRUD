function getnama(nama){
    document.getElementById('p-nama').setAttribute("value", nama.value)
}
function gettgl(tgl){
    document.getElementById('p-tgl').setAttribute("value", tgl.value)
}
function getnim(nim){
    document.getElementById('p-nim').setAttribute("value", nim.value)
}
function getjur(jurusan){
    document.getElementById('p-jur').setAttribute("value", jurusan.value)
}
function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    let bacafoto = new FileReader();
     bacafoto.readAsDataURL(document.getElementById("image-source").files[0]);

    bacafoto.onload = function(bacaevent) {
      document.getElementById("image-preview").src = bacaevent.target.result;
    };
  };