var no_words = wordCount(document.querySelectorAll(".countthis"));
function wordCount(words) {
  var count = 0;
  for (var i = 0; i < words.length; i++) {
    count += words[i].textContent.split(' ').length;
  }
  return count;
}
document.write("<h4 class='addWords'> Words of Our History: " + no_words + "</h1>");