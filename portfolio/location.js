
    window.addEventListener('scroll', function() {
      var scrollBtn = document.getElementById('scrollBtn');
      var y = window.pageYOffset;

      if (y > 100) {
        scrollBtn.innerHTML = '↑';
        scrollBtn.href = "#topsite";
      } else {
        scrollBtn.innerHTML = '↓';
        scrollBtn.href = "#bottomsite";
        
      }
    });

