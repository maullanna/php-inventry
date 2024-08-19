//Untuk menangkap value dari form dan input
const form = document.getElementById("myForm");
const inputs = form.getElementsByTagName("masuk");
//event listener dan keydown
for (let i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener("keydown", function (event) {
    if (event.keyCode === 13) {
      event.preventDefault();
      const nextIndex = i + 1;
      //maksudnya akan terus bekerja jika masih ada input selanjutnya
      if (nextIndex < inputs.length) {
        inputs[nextIndex].focus();
      } else {
        inputs[0].focus(); //maksudnya kalau sudah tidak ada input selanjutnya maka fokuskan kembali ke input pertama
      }
    }
  });
}

function validateForm() {
  var username = document.getElementById("inputUsername").value;
  var password = document.getElementById("inputPassword").value;

  if (username == "" || password == "") {
    alert("Username and Password must be filled out");
    return false;
  }
  return true;
}
