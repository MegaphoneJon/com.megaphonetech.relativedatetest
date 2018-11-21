# com.megaphonetech.relativedatetest

This is an example extension to show how to use the new hook `hook_civicrm_relativeDate`.

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v5.4+
* This relies on an unreleased hook for consideration in CiviCRM 5.9.

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl com.megaphonetech.relativedatetest@https://github.com/MegaphoneJon/com.megaphonetech.relativedatetest/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/MegaphoneJon/com.megaphonetech.relativedatetest.git
cv en relativedatetest
```

## Usage

This will add two new relative date filters, "Holiday Season" and "Q1 This Year".  "Holiday Season" will show a filter from Thanksgiving Day to Christmas Day of this year.  "Q1 This Year" is January 1st to March 31st of this year.

## Known Issues

At the time of this writing, this hook is not yet available in core CiviCRM. It is proposed for addition in CiviCRM 5.9 at the earliest.
