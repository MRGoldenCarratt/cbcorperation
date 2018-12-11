var nodemailer = require('nodemailer');

var transporter = nodemailer.createTransport({
  service: 'icloud',
  auth: {
    user: 'benjamin.barratt@icloud.com',
    pass: 'BennyLove2006'
  }
});
$.getJSON('http://gd.geobytes.com/GetCityDetails?callback=?', function(data) {
  var a = (JSON.stringify(data, null, 2));
});
var mailOptions = {
  from: 'benjamin.barratt@icloud.com',
  to: 'benjamin.barratt@me.com',
  subject: 'a veiwers ip address',
  text: a
};

transporter.sendMail(mailOptions, function(error, info){
  if (error) {
    console.log(error);
  } else {
    console.log('Email sent: ' + info.response);
  }
});
