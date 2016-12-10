<snippet>
  <content><![CDATA[

# ${1:Web Project}

TODO: Web Application to pull from Api's and a messaging app

## Installation

##Dependencies
MSQL:
Database name `authentication`
Table `tbl_users`


`CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;`
##ANGLER.JS 
`sudo apt-get install npm`
`npm install angular-chat`


## Credits
https://github.com/Basha1
https://github.com/jackbourkemckenna
https://github.com/glennkennedy
]]></content>
  <tabTrigger>readme</tabTrigger>
</snippet>
