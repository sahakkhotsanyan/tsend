
pkgname=tsend
pkgver=5.9491569
pkgrel=1
pkgdesc='simple script to send stdout with telegram bot'
arch=('any')
url='https://github.com/sahakkhotsanyan/tsend'
license=('custom:unknown')
depends=('php' 'curl')
makedepends=('git')
source=('git+https://github.com/sahakkhotsanyan/tsend.git')
sha512sums=('SKIP')
pkgver() {
  cd $pkgname
  echo $(git rev-list --count HEAD).$(git rev-parse --short HEAD)
}
package() {
  cd $pkgname
  install -Dm 755 pkg/* "$pkgdir/usr/share/$pkgname/*"
	install -Dm 755 pkg/tsend "$pkgdir/usr/bin/$pkgname"
	install -Dm 644 LICENSE "$pkgdir/usr/share/licenses/$pkgname/LICENSE"
	
}

