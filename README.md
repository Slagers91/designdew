<h1 align="center">
  <img src="https://designdew.nl/wp-content/uploads/2020/02/designdew_favicon.svg" width="224px"/><br/>
  designdew Thema
</h1>
<p align="center">Een WordPress thema ontwikkeld door designdew.</p>
<p align="center" font-size: 8px;>Versie 1.0</p>

## ⚡️ Snelle start

First of all, [download](https://golang.org/dl/) and install **Go**. Version `1.16` or higher is required.

Installation is done by using the [`go install`](https://golang.org/cmd/go/#hdr-Compile_and_install_packages_and_dependencies) command and rename installed binary in `$GOPATH/bin`:

```bash
go install github.com/create-go-app/cli/v2/cmd/cgapp
```

Also, macOS and GNU/Linux users available way to install via [Homebrew](https://brew.sh/):

```bash
# Tap a new formula:
brew tap create-go-app/cli

# Installation:
brew install create-go-app/cli/cgapp
```

Let's create a new project via **interactive console UI** (or **CUI** for short) in current folder:

```bash
cgapp create
```

Next, open the generated Ansible inventory file (called `hosts.ini`) and fill in the variables according to your server configuration. And you're ready to **automatically deploy** this project:

```bash
cgapp deploy
```

That's all you need to know to start! 🎉

## ⚠️ License

`Create Go App CLI` is free and open-source software licensed under the [Apache 2.0 License](https://github.com/create-go-app/cli/blob/master/LICENSE). Official [logo](https://github.com/create-go-app/cli/wiki/Logo) was created by [Vic Shóstak](https://shostak.dev/) and distributed under [Creative Commons](https://creativecommons.org/licenses/by-sa/4.0/) license (CC BY-SA 4.0 International).