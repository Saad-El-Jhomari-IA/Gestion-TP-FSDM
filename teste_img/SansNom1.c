#include <stdio.h>

int main()
{
    int n;
    printf("Entrez le nombre de points d'interpolation: ");
    scanf("%d", &n);

    double x[n+1], f[n+1], L[n+1][n+1];
    int i, j, k;
    for (i = 0; i <= n; i++) {
        printf("Entrez le point %d (x,f(x)): ", i);
        scanf("%lf %lf", &x[i], &f[i]);
    }

    for (i = 0; i <= n; i++) {
        for (j = 0; j <= n; j++) {
            if (j == i)
                L[i][j] = 1.0;
            else {
                double num = 1.0, den = 1.0;
                for (k = 0; k <= n; k++) {
                    if (k != i) {
                        num *= x[j] - x[k];
                        den *= x[i] - x[k];
                    }
                }
                L[i][j] = num / den;
            }
        }
    }

    printf("Polynômes d'interpolation de Lagrange:\n");
    for (i = 0; i <= n; i++) {
        printf("L%d(x) = ", i);
        for (j = 0; j <= n; j++) {
            printf("(%g)", L[i][j]);
            if (j != i)
                printf(" * (x - %g) / (%g - %g)", x[j], x[i], x[j]);
        }
        printf("\n");
    }

    return 0;
}

