<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: 
  template: component
files: true
fields:
  title:
    label: Title
    type:  text
  short:
    label: Key Concept
    type:  text
  text:
    label: Content [markdown]
    type:  textarea
  lastupdated:
    label: Last Updated
    type:  date
  cheatsheet:
    label: Cheatsheet URL
    type:  url
  sketchfile:
    label: File URL
    type:  url
  tags:
    label: Tags
    type:  tags