import csv

with open("out.txt", "r") as file1:

    with open("medicine.csv", "r") as file2:
        with open("results_file.csv", "w", newline= "") as csv_file:

            csv_writer = csv.writer(csv_file, delimiter= ",", quotechar= '"', quoting= csv.QUOTE_MINIMAL)
            for line1 in file1:
                for line2 in file2:
                    if line1==line2:
                        csv_writer.writerow(line1, line2)