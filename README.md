# Air.js

[![License](https://img.shields.io/badge/license-LGPL--2.1-blue.svg)](LICENSE)

The Air.js project provides easy client side UI framework.

Attribute based UI framework

- [Sample Pages](https://dbjson.com/samplepages)
- [Live Demo](https://dbjson.com/demo)

For more information, please see the getting started guide, and check the wiki. *Note: the wiki is being gradually updated/rewritten followed the recent merge/refactoring. Please do not hesitate to edit it if you would like!*


## Sample applications

The framework comes with a wide range of sample applications to help get you started quickly. If you downloaded the framework sources or cloned the repository, open the *Samples.sln* solution file in the Samples folder.


# Building

#### With Visual Studio 2013

Please download and start using immidiatily:

- [T4 Toolbox for Visual Studio 2013](https://visualstudiogallery.msdn.microsoft.com/791817a4-eb9a-4000-9c85-972cc60fd5aa)
- [Sandcastle Help File Builder (with VS2013 extension)](https://github.com/EWSoftware/SHFB/releases)
- [NUnit 3 Test Adapter](https://marketplace.visualstudio.com/items?itemName=NUnitDevelopers.NUnit3TestAdapter)


#### With Mono (Linux/xbuild)

    # Install Mono
    sudo apt-get install mono-complete monodevelop monodevelop-nunit git autoconf make

    # Clone the repository
    git clone https://github.com/AIR-FRAMA/air.js.git

    # Enter the directory
    cd framework

    # Build the framework solution using Mono
    ./autogen.sh
    make build
    make samples
    make test
    

# Contributing

If you would like to contribute, please do so by helping us update the [project's Wiki pages](https://github.com/accord-net/framework/wiki). While you could also make a donation through PayPal [![Donate](https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=YYWWWW8BG), fill-in bug reports and contribute code in the form of pull requests, the most precious donation we could receive would be a bit of your time - [please take some minutes to submit us more documentation examples to our Wiki pages](https://github.com/AIR-FRAME/air.js/wiki) :wink: 

Join the chat at https://dbjson.com
