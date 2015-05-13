(function() {
  var appContent, appImageClass, footerLinks, menu, root, socials;

  menu = ['Facilities', 'Instruments', 'Research'];

  footerLinks = ['STAFF PORTAL', 'LINKS', 'SCIENCE LINKS', 'BOARD OF DIRECTORS'];

  socials = ['in', 'twitter', 'youtube'];

  root = typeof exports !== "undefined" && exports !== null ? exports : this;

  root.generateMenu = function() {
    var i;
    i = 0;
    while (i < menu.length) {
      document.write('<li' + (i === 0 ? ' id=\'selected\'' : '') + '><a href="#">' + menu[i] + '</a></li>');
      i++;
    }
  };

  root.generateFooterLinks = function() {
    var i;
    i = 0;
    while (i < footerLinks.length) {
      document.write('<a href="#">' + footerLinks[i] + '</a><br/>');
      i++;
    }
  };

  root.generateSocialIcons = function() {
    var i;
    i = 0;
    while (i < socials.length) {
      document.write('<a href="" target="_blank"><img src="'+ templateDirectory +'/img/' + socials[i] + '.png"/></a>');
      i++;
    }
    return returns;
  };

}).call(this);
