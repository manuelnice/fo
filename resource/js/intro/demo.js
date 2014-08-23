+function ($) {
  $(function(){
    
    var intro = introJs();

    intro.setOptions({
      steps: [
      {
          element: '.nav-user',
          intro: '<p class="h4 text-uc"><strong>1: Quick Bar</strong></p><p>Manage your Account using this area.</p>',
          position: 'bottom'
        },
        {
          element: '#nav header',
          intro: '<p class="h4 text-uc"><strong>2: Quick Access</strong></p><p>Contains links that can be used for common operations.</p>',
          position: 'right'
        },
        {
          element: '#userguide',
          intro: '<p class="h4 text-uc"><strong>3: Changelog</strong></p><p>Contains Freelancer Office changelog are displays the current version. Use the Documentation link to Access the userguide</p>',
          position: 'right'
        }, 
        {
          element: '#contributors',
          intro: '<p class="h4 text-uc"><strong>4: Translators</strong></p><p>Help us translate the script to different languages and get your name included here.</p>',
          position: 'left'
        },       
        {
          element: '#developer',
          intro: '<p class="h4 text-uc"><strong>5: Developer</strong></p><p>Powered by Freelancer Office - Gitbench.</p>',
          position: 'top'
        }
      ],
      showBullets: true,
    });

    intro.start();

  });
}(jQuery);