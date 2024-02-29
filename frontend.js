function createFeed(url) {
    fetch(url + "/nanoblog")
          .then(function (response) {
            return response.json();
          })
          .then(function (data) {
            appendData(data);
          })
          .catch(function (err) {
            console.log("error: " + err);
        });

        function appendData(data) {
          var mainContainer = document.getElementById("feed");
          var numberElement = document.getElementById("posts");
          numberElement.innerHTML = data.length;
          for (var i = 0; i < data.length; i++) {
            var post = document.createElement("article");
            var br = document.createElement("br");
            post.innerHTML = "<time>" + data[i].date + "</time><br>" + DOMPurify.sanitize(marked.parse(data[i].content));
            post.id = data[i].id;
            mainContainer.appendChild(post);
            post.classList.add("h-entry");
            mainContainer.appendChild(br);
        }
    }
}