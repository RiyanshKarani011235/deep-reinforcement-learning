#include <string.h>
#include <zlib.h>
int main(void) { return strcmp(ZLIB_VERSION, zlibVersion()); }
