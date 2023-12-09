 document.addEventListener('DOMContentLoaded', function () {
        var tags = document.querySelectorAll('.tag');
        tags.forEach(function (tag) {
            tag.addEventListener('click', function () {
                var groupId = this.getAttribute('data-group-id');
                var groupTitle = this.textContent.trim();
                var titleInput = document.getElementById('title');

                titleInput.value = groupTitle;

                // If you want to do something with groupId, you can use it here
                // For example, you can make an AJAX request to get more details based on groupId
                // var xhr = new XMLHttpRequest();
                // xhr.open('GET', '/get-group-details/' + groupId, true);
                // xhr.onreadystatechange = function () {
                //     if (xhr.readyState === 4 && xhr.status === 200) {
                //         var response = JSON.parse(xhr.responseText);
                //         // Do something with the response
                //     }
                // };
                // xhr.send();
            });
        });
    });
