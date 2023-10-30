#!/bin/bash
cat /etc/*release | grep PRETTY_NAME
echo
free -m
echo
echo "The user has been clicked the button - `date`" >> log.txt
