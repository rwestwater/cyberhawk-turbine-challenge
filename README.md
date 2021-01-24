# fizzbuzz-turbine-challenge
An application written in PHP and HTML/CSS that visualises a unique spin on the classic FizzBuzz Challenge

PHP 7.4 hosted on AWS Elastic Beanstalk 

## Installation
### Requirements for installation
- Your own AWS account

### Installation Steps
- Pull down the repo
- Zip the repo up
- Log into AWS
- Navigate to Elastic Beanstalk service
- Choose an appropriate region (I used eu-west-2 (London))
- Click the create application button
- Fill in the `Create a web app` form with the relevant details
- Select your platform to be PHP, leaving the populated details as default
- Upload your zipped repo using the `Upload your code` option
- Click the `Configure more options` button and navigate to edit the software panel
- Modify the document root option to be the name of the repo (this will ensure the code is served from the correct location)
- Click the save button
- Click the `Create app` button

You will be given a custom hostname provided by Elastic Beanstalk where you can view the code in production

## Pseudocode

```php

for numbers in range 1 to 100 {
  for each number {
    if number == / of 3
      print "coating damage"
    if number == / of 5
      print "lightning strike"
    if number == / of 3 && 5
      print "coating damage and lightning strike"
  }
}

```

## MVP
- The script will be written in php
- The script will be rendered using html
- Use Github for version control
- Host script in AWS

## Nice to haves (future development) 
- Pulling the inspection data down in an Ajax call and processing the results in the browser
- Add a randomiser option where an event click will pick a number between 1 and 100 and render the results
- Pass through unit testing (TDD)
- Resolve issue with marquee (old technology)

## Problems encountered
- Document root needed to be specified as the relative paths were not working
- Custom domain name (Route 53 record) led to the page not loading in the browser however loaded using curl from the command line (extra investigation needed)
- Default index page doesn't exist so need to use the exact path to the php script (easy fix by creating an index page or changing webserver configuration)

## Author Notes
- Keep as vanilla as possible
- Simple design for accessability
- Target completion time: 4 hours
