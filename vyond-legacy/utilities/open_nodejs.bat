:: opens node.js in a standalone batch so that i can use a tool that silently runs batch files
:: this is stupid
:: please help
@echo off
pushd "%~dp0"
title NODE.JS HASN'T STARTED YET

:: Load current settings
if "%SUBSCRIPT%"=="" ( 
	set SUBSCRIPT=y
	call config.bat
	set "SUBSCRIPT="
) else (
	call config.bat
)

pushd ..\wrapper

:::::::::::::::::::
:: Node.js stuff ::
:::::::::::::::::::

:: set environment variables
set DISCORD_RPC=%RPC%
if not exist node_modules (
npm install
npm start
)
:: start wrapper
npm start

:: this only happens if node crashes
echo:
echo If you see an error saying "npm is not recognized",
echo please install Node.js from nodejs.org.
pause & exit /B
