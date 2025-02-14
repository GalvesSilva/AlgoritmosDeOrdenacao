
# Análise de Complexidade e Eficiência dos Algoritmos de Ordenação

## 1. Complexidade de Tempo e Espaço (Big O)

| Algoritmo   |   Melhor Caso     | Pior Caso         |
|-------------|-------------------|-------------------|
| QuickSort   | `O(n log n)`      | `O(n²)`           | 
| MergeSort   | `O(n log n)`      | `O(n log n)`      | 
| BubbleSort  | `O(n)`            | `O(n²)`           | 

---

## 2. Comparação dos Resultados e Cenários Adequados

### Dados de Tempo de Execução por Cenário

| Cenário             | QuickSort (s)         | MergeSort (s)         | BubbleSort (s)        |
|----------------------|-----------------------|-----------------------|------------------------|
| **Small List**       | 0.00010395050048828   | 0.00010895729064941   | 0.00023603439331055    |
| **Medium List**      | 0.013154029846191     | 0.016982078552246     | 2.3707849979401        |
| **Big List**         | 0.18930697441101      | 0.20533299446106      | 229.76207685471        |
| **Sorted List**      | 0.016103029251099     | 0.001039981842041     | 0.016262054443359      |
| **Reversed List**    | 0.036389827728271     | 0.0011701583862305    | 0.030009984970093      |
| **Duplicated List**  | 0.0064589977264404    | 0.0016098022460938    | 0.01511812210083       |

---

### Comparação dos Resultados por Cenário

### a. Listas Pequenas  
- **Melhor resultado**: QuickSort (`0.000104s`).  
- **Pior resultado**: BubbleSort (`0.000236s`).  

### b. Listas Médias  
- **Melhor resultado**: QuickSort (`0.013s`).  
- **Pior resultado**: BubbleSort (`2.37s`).  

### c. Listas Grandes  
- **Melhor resultado**: QuickSort (`0.189s`).  
- **Pior resultado**: BubbleSort (`229.76s`).  

### d. Listas Ordenadas  
- **Melhor resultado**: MergeSort (`0.001s`).  
- **Pior resultado**: QuickSort e BubbleSort (`0.016s`).  

### e. Listas Invertidas  
- **Melhor resultado**: MergeSort (`0.0012s`).  
- **Pior resultado**: QuickSort (`0.036s`).  

### f. Listas com Duplicatas  
- **Melhor resultado**: MergeSort (`0.0016s`).  
- **Pior resultado**: BubbleSort (`0.015s`).  

---

## Principais Conclusões

**QuickSort** : foi o mais rápido em cenários de **listas aleatórias** (pequenas, médias e grandes).   QuickSort mostrou vulnerabilidade em listas **ordenadas/invertidas**, enquanto MergeSort manteve consistência em todos os cenários.ais.
**MergeSort** : dominou em cenários com **dados estruturados** (ordenados, invertidos, duplicatas).  
**BubbleSort** :teve o **pior desempenho** na maioria dos casos, exceto em listas ordenadas (empatou com QuickSort). 

### Observações  
- Os dados acima são extraídos do `consolidated_results.csv`.  
- Valores arredondados para melhor legibilidade nas comparações.  

---

## 3. Sugestões de Otimização

### QuickSort
- **Pivô Inteligente**: Usar mediana de três ou pivô aleatório para evitar `O(n²)` em listas ordenadas.  
  *Impacto*: Reduziria o tempo de "Sorted List" de 0.016s para ~0.001s.  

---

## 4. Considerações Finais
- **Dados grandes/aleatórios**: QuickSort.  
- **Dados pré-ordenados/estruturados**: MergeSort.  
- **Restrições de memória**: QuickSort.  
- **BubbleSort**: Evitar em cenários reais, exceto para listas minúsculas ou simulações didáticas.

