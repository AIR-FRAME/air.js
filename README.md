# Air.js

[![License](https://img.shields.io/badge/license-LGPL--2.1-blue.svg)](LICENSE)
[![NuGet](https://img.shields.io/nuget/v/Accord.svg)]()
[![NuGet Pre Release](https://img.shields.io/nuget/vpre/Accord.svg)]()

The Air.js project provides easy framework.

After merging with the AForge.NET project, the framework now offers a unified API for learning/training machine learning models that is both easy to use *and* extensible. It is based on the following pattern:

- Choose a [learning algorithm](http://accord-framework.net/docs/html/N_Accord_MachineLearning.htm) that provides a Learn(x, y) or Learn(x) method;
- [Use the Learn(x, y)](http://accord-framework.net/docs/html/M_Accord_MachineLearning_VectorMachines_Learning_SequentialMinimalOptimization_Learn.htm) to create a [machine learning model](http://accord-framework.net/docs/html/T_Accord_MachineLearning_VectorMachines_SupportVectorMachine.htm) learned from the data; 
- Use the model's [Transform](http://accord-framework.net/docs/html/M_Accord_MachineLearning_ClassifierBase_2_Transform.htm), [Decide](http://accord-framework.net/docs/html/M_Accord_MachineLearning_ClassifierBase_2_Decide_1.htm), [Scores](http://accord-framework.net/docs/html/M_Accord_MachineLearning_BinaryScoreClassifierBase_1_Scores_3.htm), [Probabilities](http://accord-framework.net/docs/html/M_Accord_MachineLearning_BinaryLikelihoodClassifierBase_1_Probabilities.htm) or [LogLikelihoods](http://accord-framework.net/docs/html/M_Accord_MachineLearning_VectorMachines_SupportVectorMachine_2_LogLikelihood.htm) methods.

For more information, please see the getting started guide, and check the wiki. *Note: the wiki is being gradually updated/rewritten followed the recent merge/refactoring. Please do not hesitate to edit it if you would like!*


## Sample applications

The framework comes with a wide range of sample applications to help get you started quickly. If you downloaded the framework sources or cloned the repository, open the *Samples.sln* solution file in the Samples folder.


# Building

#### With Visual Studio 2013

Please download and install the following dependencies:

- [T4 Toolbox for Visual Studio 2013](https://visualstudiogallery.msdn.microsoft.com/791817a4-eb9a-4000-9c85-972cc60fd5aa)
- [Sandcastle Help File Builder (with VS2013 extension)](https://github.com/EWSoftware/SHFB/releases)
- [NUnit 3 Test Adapter](https://marketplace.visualstudio.com/items?itemName=NUnitDevelopers.NUnit3TestAdapter)


#### With Mono (Linux/xbuild)

<grid-container template="../../templates/grid_template.html" data="data/locations.php" save="/save/">
	<grid-columns>
		<grid-column title="ID" bind="ID" />
		<grid-column title="Name" bind="NAME" />
		<grid-column title="Address" bind="ADD1" />
		<grid-column title="City" bind="CITY" />
		<grid-column title="State" bind="STATE" />
		<grid-column title="Zip" bind="ZIP" />
		<grid-column title="Country" bind="COUNTRY" />
	</grid-columns>
	<grid edit-link="1" edit-id="0" edit-action="openRecordInTab" edit-form="_index.html" />
</grid-container>
    

# Contributing

If you would like to contribute, please do so by helping us update the [project's Wiki pages](https://github.com/accord-net/framework/wiki). While you could also make a donation through PayPal [![Donate](https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=YYWWWW8BG), fill-in bug reports and contribute code in the form of pull requests, the most precious donation we could receive would be a bit of your time - [please take some minutes to submit us more documentation examples to our Wiki pages](https://github.com/AIR-FRAME/air.js/wiki) :wink: 

Join the chat at https://dbjson.com
