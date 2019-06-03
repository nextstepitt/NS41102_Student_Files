![](.common/nsbanner.png?raw=true)

# NS41102 Mastering PHP Programming - Student Files

This project contains the lab framework for the Mastering PHP Programming class.
You may clone the framework or download a zip of the framework on this page.
There are working solutions for all of the labs, and example projects, that may be a good reference for building React programs
with TypeScript even if you are not interested in the course.

Do the rapidly changing landscape of PHP, and web application programming in general, this material is updated frequently.
Feel free to come back and download new versions whenever you want to.

## License

The lab framework code is licensed under the MIT license. The corresponding courseware is not. You may use and modify all or part of it as you choose, as long as attribution to the source is provided per the license. See the details in the [license file](./LICENSE.md) or at the [Open Source Initiative](https://opensource.org/licenses/MIT)

## Class Setup

Administrative access may be required to install some tools. If you are taking the class online, you may want to consider using dual
monitors or working in an environment with a projection screen to follow what the instructor demonstrates.

### Required Software Configuration

* Provide instructions on the tools and software that must be installed for the course labs to work. 

## Student Files Folder Layout

```
Student_Files
│
└── [Insert Course Title]
    └── Examples
    │    └── 02_[insert chapter title]
    │    └── ...
    │ 
    └── Labs
    │       .gitignore
    │ 
    └── Resources
    │    └── 02_[insert chapter title]
    │    └── ...
    │ 
    └── Solutions
        └── 01_Overview
        └── 02_[insert chapter title]
        └── ...
```

* All courses have a separate folder under Student_Files so they can exist side-by-side.
* Each lab folder has a number and a name, to remind you of what the lab was about.
* The Labs folder is an empty space to do your work.
* You can always copy the solution of a previous lab as the starting point for a new lab.

## Running the Solutions

They are strictly basic PHP projects, version 7.
Run php -s [host]:[port] in the project folder or with appropriate options to start the built-in server, then browse to that address.

These solutions were created with PhpStorm by JetBrains.
To run them inside of PhpStorm open the project directory and set the PHP interpreter and level to 7.X.
Create a run configuration that launches the built-in PHP server (the PHP built-in one, not the internal PhpStorm server).

The PhpStorm internal server will work, but sometimes there are issues with it running perfectly acceptable PHP code, which are never logged
as an error.
A 503 error either is a code problem, or just a problem with the internal server running the code.
JetBrains normally steers developers towards the PHP built-in server.

<hr>
Copyright © 2019 NextStep IT Training. All rights reserved.