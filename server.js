const express = require('express');
const path = require('path');
const app = express();

const bodyParser = require("body-parser");
const nodemailer = require('nodemailer');
const { check, validationResult } = require("express-validator");
const sendgridTransport = require("nodemailer-sendgrid-transport");

app.use(
    bodyParser.urlencoded({
        extended: false,
    })
);

app.set('view engine', 'ejs');
app.use(express.static(__dirname + "/public"));
app.use(bodyParser.json());
app.get('/index', (req, res) => {
    res.render("index", {
        message: ""
    })
});

app.get('/contact', (req, res) => {
    res.render("contact", {
        message: ""
    })
});

app.post('/sendmessage', [
    check("name", "Name is required").not().isEmpty(),
    check("email", "Please include a valid email").isEmail(),
    check("message", "Message is required").not().isEmpty(),

],

    (req, res) => {
        console.log(req.body);
        // console.log(req.body['g-recaptcha-response']);
        if (req.body['g-recaptcha-response'] === "") {
            res.render("contact", {
                message: "Fill"
            });
        }
        const errors = validationResult(req);
        if (!errors.isEmpty()) {
            console.log(errors);
            res.render("contact", {
                message: "Fill"
            });
        }
        const output = `
    <p>You have a new contact request</p>
    <h3>Contact Details</h3>
    <ul>  
      <li>Name: ${req.body.name}</li>
      <li>Email: ${req.body.email}</li>
    </ul>
    <h3>Message</h3>
    <p>${req.body.message}</p>
  `;

        // create reusable transporter object using the default SMTP transport
        const transporter = nodemailer.createTransport({
            service: 'outlook',
            port: 587,
            auth: {
                user: 'sfoly@outlook.com',
                pass: '@Springfield18@'
            },
            tls: {
                rejectUnauthorized: false
            }
        });


        // setup email data with unicode symbols
        let mailOptions = {
            from: "sfoly@outlook.com", // sender address
            to: 'sfoly.com@gmail.com', // list of receivers
            subject: 'Node Contact Request', // Subject line
            text: 'Hello world?', // plain text body
            html: output // html body
        };

        // send mail with defined transport object
        transporter.sendMail(mailOptions, (error, info) => {
            // console.log(info);
            if (error) {
                return console.log(error);
            }
            // console.log('Message sent: %s', info.messageId);
            // console.log('Preview URL: %s', nodemailer.getTestMessageUrl(info));

            res.render('contact', {
                message: "Message"
            });
        });
    });


app.post('/index', [
    check("name", "Name is required").not().isEmpty(),
    check("email", "Please include a valid email").isEmail(),
    check("message", "Message is required").not().isEmpty(),

],

    (req, res) => {
        console.log(req.body)
        if (req.body['g-recaptcha-response'] === "") {
            res.render("contact", {
                message: "Fill"
            });
        }
        const errors = validationResult(req);
        if (!errors.isEmpty()) {
            console.log(errors);
            res.render("index", {
                message: "Fill"
            });
        }
        const output = `
        <p>You have a new contact request</p>
        <h3>Contact Details</h3>
        <ul>  
          <li>Name: ${req.body.name}</li>
          <li>Email: ${req.body.email}</li>
        </ul>
        <h3>Message</h3>
        <p>${req.body.message}</p>
      `;

        // create reusable transporter object using the default SMTP transport
        const transporter = nodemailer.createTransport({
            service: 'outlook',
            port: 587,
            auth: {
                user: 'sfoly@outlook.com',
                pass: '@Springfield18@'
            },
            tls: {
                rejectUnauthorized: false
            }
        });


        // setup email data with unicode symbols
        let mailOptions = {
            from: "sfoly@outlook.com", // sender address
            to: 'sfoly.com@gmail.com', // list of receivers
            subject: 'Node Contact Request', // Subject line
            text: 'Hello world?', // plain text body
            html: output // html body
        };

        // send mail with defined transport object
        transporter.sendMail(mailOptions, (error, info) => {
            console.log(info);
            if (error) {
                return console.log(error);
            }
            console.log('Message sent: %s', info.messageId);
            console.log('Preview URL: %s', nodemailer.getTestMessageUrl(info));

            res.render('index', {
                message: "Message"
            });
        });
    });


app.get('/', (req, res) => {
    res.render('index', {
        message: "",
    })
})

app.listen(3000, () => {
    console.log('server is running');
})