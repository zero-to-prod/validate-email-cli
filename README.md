# Zerotoprod\ValidateEmailCli

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/validate-email-cli)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/validate-email-cli/test.yml?label=test)](https://github.com/zero-to-prod/validate-email-cli/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/validate-email-cli/backwards_compatibility.yml?label=backwards_compatibility)](https://github.com/zero-to-prod/validate-email-cli/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/validate-email-cli/build_docker_image.yml?label=build_docker_image)](https://github.com/zero-to-prod/validate-email-cli/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/validate-email-cli?color=blue)](https://packagist.org/packages/zero-to-prod/validate-email-cli/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/validate-email-cli.svg?color=purple)](https://packagist.org/packages/zero-to-prod/validate-email-cli/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/validate-email-cli?color=f28d1a)](https://packagist.org/packages/zero-to-prod/validate-email-cli)
[![License](https://img.shields.io/packagist/l/zero-to-prod/validate-email-cli?color=pink)](https://github.com/zero-to-prod/validate-email-cli/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/validate-email-cli.svg)](https://wakatime.com/badge/github/zero-to-prod/validate-email-cli)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/validate-email-cli?branch=main)](https://hitsofcode.com/github/zero-to-prod/validate-email-cli/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Documentation Publishing](#documentation-publishing)
    - [Automatic Documentation Publishing](#automatic-documentation-publishing)
- [Usage](#usage)
  - [Available Commands](#available-commands)
    - [`validate-email-cli:src`](#validate-email-clisrc)
    - [`validate-email-cli:show-regex`](#validate-email-clishow-regex)
    - [`validate-email-cli:validate`](#validate-email-clivalidate)
- [Docker Image](#docker-image)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Image Development](./IMAGE_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

A cli for validating an email.

## Requirements

- PHP 8.1 or higher.

## Installation

Install `Zerotoprod\ValidateEmailCli` via [Composer](https://getcomposer.org/):

```bash
composer require zero-to-prod/validate-email-cli
```

This will add the package to your project's dependencies and create an autoloader entry for it.

## Documentation Publishing

You can publish this README to your local documentation directory.

This can be useful for providing documentation for AI agents.

This can be done using the included script:

```bash
# Publish to default location (./docs/zero-to-prod/validate-email-cli)
vendor/bin/zero-to-prod-validate-email-cli

# Publish to custom directory
vendor/bin/zero-to-prod-validate-email-cli /path/to/your/docs
```

### Automatic Documentation Publishing

You can automatically publish documentation by adding the following to your `composer.json`:

```json
{
    "scripts": {
        "post-install-cmd": [
            "zero-to-prod-validate-email-cli"
        ],
        "post-update-cmd": [
            "zero-to-prod-validate-email-cli"
        ]
    }
}
```

## Usage

Run this command to see the available commands:

```shell
vendor/bin/validate-email-cli list
```

### Available Commands

This CLI provides three main commands for email validation and project information:

#### `validate-email-cli:src`

Displays the project's GitHub repository URL.

**Usage:**
```shell
vendor/bin/validate-email-cli validate-email-cli:src
```

**Arguments:** None

**Example:**
```shell
$ vendor/bin/validate-email-cli validate-email-cli:src
https://github.com/zero-to-prod/validate-email-cli
```

#### `validate-email-cli:show-regex`

Shows the regex pattern used to validate email addresses.

**Usage:**
```shell
vendor/bin/validate-email-cli validate-email-cli:show-regex
```

**Arguments:** None

**Example:**
```shell
$ vendor/bin/validate-email-cli validate-email-cli:show-regex
/^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/
```

#### `validate-email-cli:validate`

Validates an email address. Returns the email when valid, empty string otherwise.

**Usage:**
```shell
vendor/bin/validate-email-cli validate-email-cli:validate <email>
```

**Arguments:**
- `email` (required) - The email address to validate

**Examples:**
```shell
# Valid email
$ vendor/bin/validate-email-cli validate-email-cli:validate user@example.com
user@example.com

# Invalid email
$ vendor/bin/validate-email-cli validate-email-cli:validate invalid-email
[empty output]

# Complex valid email
$ vendor/bin/validate-email-cli validate-email-cli:validate john.doe+newsletter@sub.domain.com
john.doe+newsletter@sub.domain.com
```

## Docker Image

You can also run the cli using the [docker image](https://hub.docker.com/repository/docker/davidsmith3/validate-email-cli/general):

```shell
docker run --rm davidsmith3/validate-email-cli
```

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/validate-email-cli/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.
