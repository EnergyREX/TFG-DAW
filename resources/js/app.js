const xhr = new XMLHttpRequest();
const URI = window.location.href

xhr.onreadystatechange = function() {
  if(this.readyState == 4 && this.status == 200) {
    console.log('READY')
    document.getElementById("content").innerHTML = xhr.responseText;
    console.log(JSON.parse(xhr.responseText))
  }
}

xhr.open("GET", `${URI}appointments/api/all`, true)
xhr.send()