# IAT for ScriptingRT

This is a sample IAT for ScriptingRT, which is a Flex framework for developing psychological experiments that measure reaction times.

This IAT is based on an example implementation of the IAT used in [Snowden, Wichter, and Gray (2008)](http://dx.doi.org/10.1007/s10508-006-9138-z), assessing reaction times (in the typical IAT fashion) of categorizing words as sexually attractive or unattractive, and pictures as either male or female.

## Contents

### sexualityiat.mxml

This file describes an example experiment. It includes instructions, the four main categories, and all the stimuli.

### helper.actionscript

This file provides the toggleVis() method that makes `sexualityiat.mxml` cleaner and more accessible to edit.

### sexualityiat.php

This PHP script provides an example of how to load the task in a web browser, including passing a subject ID from the URL.

### images/*

Placeholder images.

## Requirements

To create a task based upon this example, you must have Flex installed on your machine, and also have a copy of the ScriptingRT framework.

In addition, to use this task in experiments, you will likely want a webserver to host this on, or you can

## Notes

If you intend to use this as a basis for creating your own IAT, you will want to read through and understand each of the included files.

I have posted this as a place to get started with IATs in ScriptingRT. You will have to compile the task into an SWF object, upload it to a web server/host it locally, and also understand PHP for data collection.

In addition, I have not included the IAPS images used in the actual task. You must acquire those on your own.

## Usage

Example: `/Applications/Adobe\ Flex\ SDK/bin/mxmlc -static-link-runtime-shared-libraries=true -tools-locale=en_US -library-path+=~/ScriptingRT/scriptingrt0352.swc sexualityiat.mxml

## Additional Information

ScriptingRT can be found here: https://github.com/thomasschubert/scriptingrt

More information on ScriptingRT can be found here: http://reactiontimes.wordpress.com/2011/11/06/about-us-what-is-scriptingrt/