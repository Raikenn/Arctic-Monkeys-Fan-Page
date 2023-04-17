$(function(){
  $('#target').actualizer('a#demo');
});

var i = 0, len;
DisplayAlbum(i);

function DisplayAlbum(i) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this, i);
    }
  };
  xmlhttp.open("GET", "whatever.xml", true);
  xmlhttp.send();
}

function myFunction(xml, i) {
  var xmlDoc = xml.responseXML; 
  x = xmlDoc.getElementsByTagName("Song");
  len = x.length;
  document.getElementById("ShowAlbum").innerHTML =
  "Song Name: " +
  x[i].getElementsByTagName("SongName")[0].childNodes[0].nodeValue +
  "<br>Duration: " +
  x[i].getElementsByTagName("Duration")[0].childNodes[0].nodeValue +
  "<br>Year: " + 
  x[i].getElementsByTagName("ReleaseDate")[0].childNodes[0].nodeValue;
}

function next() {
  if (i < len-1) {
    i++;
    DisplayAlbum(i);
  }
}

function previous() {
  if (i > 0) {
    i--;
    DisplayAlbum(i);
  }
}


