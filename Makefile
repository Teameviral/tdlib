clean:
	rm -rf build

update:
	ppm --generate-package="src"

build:
	mkdir build
	ppm --no-intro --compile="src" --directory="build"

install:
	ppm --no-prompt --fix-conflict --branch="production" --install="build/net.intellivoid.tdlib.ppm"