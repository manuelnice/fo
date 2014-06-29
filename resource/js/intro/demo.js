+function ($) {
  $(function(){
    
    var intro = introJs();

    intro.setOptions({
      steps: [
      {
          element: '.nav-user',
          intro: '<p class="h4 text-uc"><strong>1: Quick Bar</strong></p><p>This is the notification, search and user information quick tool bar. You can also change your settings here.</p>',
          position: 'bottom'
        },
        {
          element: '#nav header',
          intro: '<p class="h4 text-uc"><strong>2: Quick Access</strong></p><p>You can quickly access common functions using this links.</p>',
          position: 'right'
        },
        {
          element: '#userguide',
          intro: '<p class="h4 text-uc"><strong>3: User Guide</strong></p><p>Read through the user Guide to Learn More on Kabuportal</p>',
          position: 'right'
        }, 
        {
          element: '#contributors',
          intro: '<p class="h4 text-uc"><strong>4: Contributers</strong></p><p>Identify a task on Kabuportal and write a short tutorial on how to do the task. After approval, you will be added to the list of Sysem Contributors.</p>',
          position: 'left'
        },       
        {
          element: '#developer',
          intro: '<p class="h4 text-uc"><strong>5: System Developer</strong></p><p>Developed and Maintained by William Mandai.</p>',
          position: 'top'
        }
      ],
      showBullets: true,
    });

    intro.start();

  });
}(jQuery);